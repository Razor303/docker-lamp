FROM tutum/lamp:latest
RUN rm -fr /app && git clone https://git@github.com:Razor303/docker-test.git
EXPOSE 80 3306
CMD ["/run.sh"]
