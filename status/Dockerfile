FROM tomcat:8.5

# Deploy our web app
COPY ./webapp /usr/local/tomcat/webapps/ROOT/

# Set weak credentials for access (e.g., admin:admin)
RUN echo 'admin:admin' > /usr/local/tomcat/conf/tomcat-users.conf

EXPOSE 8080
