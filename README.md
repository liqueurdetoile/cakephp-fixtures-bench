# CakePHP Fixtures benchmark
This benchmark aimed to demonstrate why optimizing fixtures loading can boost tests speed as creating table can be a real overhead on some RDBMS.

The db schema is as follows :
- Users has many Deployments
- Creleases has many Deployments
- Sreleases ha many Deployments

In our app, we want to performs tests on **Users**. 70% of theses tests are only needing schema and fixture data from Users and 30% also need Deployments schema and/or fixture data.

# Scenario 1 (from cakephp 4.2.0) : All 4 fixtures must be loaded
Because Deployments is also constrained by Creleases and Sreleases, all four fixtures MUST be loaded or tests on Users will fail.

# Scenario 2 (Cakephp 3.x && < 4.2.0) : Only users and Deployments fixtures are loaded
This is the common behavior prior 4.2.0.

# Scenario 3 (experimental) : Only relevant fixtures are loaded from test
It means that 70% of Users tests will only load 1 fixture and 30% will load 2. I'm using a quick tweaked FixtureManager available under `App\TestSuite\Fixture` namespace. It's only disabling constraints checking when loading single fixtures similarly to what is done prior 4.2.0. when autofixtures are enabled and handling sqlite to avoid enabling foreing keys after foxtire setup DDL.

For each scenario, we run 100 fake empty tests that only load fixtures and check duration to compare. The matrix is the same used by Cakephp tests itself. The results is time taken in seconds for all the tests to be run.

# Local results
The raw results are not very interesting by themselves as it depends on many things.

Mode               | Scenario 1 | Scenario 2 | Scenario 3
-------------------|:----------:|:----------:|:---------:
php7.4 + mysql 4.7 |     95     |     62     |     27
php7.4 + sqlite    |    0.312   |    0.292   |   0.235

# Remote results
Mode                          | Scenario 1 | Scenario 2 | Scenario 3
------------------------------|:------------:|:------------:|:-----------:
php7.2 + sqlite               |            |            |
php7.2 + mysql latest         |            |            |
php7.2 + pgsql                |            |            |
php7.4 + sqlite               |            |            |
php7.4 + mysql latest         |            |            |
php7.4 + pgsql                |            |            |
php8 + sqlite                 |            |            |
php8 + mysql latest           |            |            |
php8 + pgsql                  |            |            |
php7.2 + mariadb              |            |            |
php7.2 + mysql 4.7            |            |            |
php7.4 + SQL server (windows) |            |            |
