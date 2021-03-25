FROM python:3.7.3

WORKDIR /

COPY . /cgi-bin

CMD ["python", "-m", "http.server", "8888", "--cgi"]