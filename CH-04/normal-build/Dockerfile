FROM golang:latest
WORKDIR /myapp
ADD go.mod .
COPY welcome.go .
# RUN go mod init
RUN go build -o welcome .
ENTRYPOINT ["./welcome"]

