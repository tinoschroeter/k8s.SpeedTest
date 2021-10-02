pipeline {
    agent any

    stages {
        stage('Build Dev') {
            steps {
                echo 'Build Dev..'
                sh("if [ -d 'k3s/dev' ]; then cd k3s/dev/ && skaffold run; fi")
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Build Production') {
            steps {
                echo 'Build Production....'
                sh("if [ ${GIT_BRANCH} == 'master' ]; then cd k3s/production/ && skaffold run; fi")
            }
        }
    }
}
