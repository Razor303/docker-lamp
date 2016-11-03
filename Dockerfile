FROM tutum/lamp:latest
RUN rm -fr /app && git clone https://git@portersdesk.xyz:razor303/App2.git
EXPOSE 80 3306
CMD ["/run.sh"]
