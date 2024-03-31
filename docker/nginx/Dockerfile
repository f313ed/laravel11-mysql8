FROM nginx:1.23

RUN rm -f /etc/nginx/conf.d/default.conf

COPY conf.d/default.conf /etc/nginx/conf.d/

CMD ["nginx", "-g", "daemon off;"]