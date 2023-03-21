Hospital Patient Management System

This project is a Hospital Patient Management System. Here are the instructions to run the project:

If the project folder comes as "Hospital-Patient-Management-System-main", change it to "Hospital-Patient-Management-System".

Run the following command:
kool run setup

Then run:
docker-compose up

Open a new terminal window and run:
docker exec -it hospital-patient-management-system-app-1 /bin/bash

Inside the /bin/bash, run:
php artisan migrate --seed

Finally, run on the terminal:
npm run dev

If you got any "EACCES: permission denied" error run:
sudo chmod -R 777 ./

This will set up and run the project. You can access the website at http://localhost/patients.
