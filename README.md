Hello to my projet : ft_server.

to build and run the image use this command :

docker build -t image_ft_server . && docker run -p 80:80 -p 443:443 -it --name ft_server image_ft_server

Once in Docker run the script start.sh with the command : 

sh start.sh

to leave Docker just use the word "exit"

to delete and clean docker image and docker container use the command :

docker system prune -a and use y to valid

Thank you
