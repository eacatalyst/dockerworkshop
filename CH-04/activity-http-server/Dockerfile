FROM golang:latest AS builder
WORKDIR /myapp
COPY main.go .
COPY go.mod .
RUN go build -o main .
FROM alpine:latest AS runtime
WORKDIR /myapp
COPY --from=builder /myapp/main .
ENTRYPOINT ["./main"]
EXPOSE 8080