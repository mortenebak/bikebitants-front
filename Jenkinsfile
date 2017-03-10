#!/usr/bin/env groovy

node('master') {
   try {
       stage('build') {
           git url: 'git@bitbucket.org:bikebitants/bikebitants.git'

           // Start services (Let docker-compose build containers for testing)
           sh "./develop up -d"

           // Get composer dependencies
           sh "./develop composer install"

           // Create .env file for testing
           sh '/var/lib/jenkins/.venv/bin/aws s3 cp s3://bikebitants-secrets/env-ci .env'
           sh './develop art key:generate'
           sh './develop art geoip:update'
       }

       stage('test') {
           sh "APP_ENV=testing ./develop test"
       }

       if( env.BRANCH_NAME == 'master' ) {
           stage('package') {
               sh './docker/build'
           }
       }
   } catch(error) {
       // Maybe some alerting?
       throw error
   } finally {
       // Spin down containers no matter what happens
       sh './develop down'
   }
}