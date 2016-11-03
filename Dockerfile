FROM tutum/lamp:latest
RUN rm -fr /app && git clone https://github.com/Razor303/docker-lamp.git
EXPOSE 80 3306
CMD ["/run.sh"]
