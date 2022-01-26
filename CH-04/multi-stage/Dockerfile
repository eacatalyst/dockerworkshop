FROM golang:latest AS builder
WORKDIR /myapp
COPY welcome.go .
COPY go.mod .
RUN go build -o welcome .
FROM scratch
WORKDIR /myapp
COPY --from=builder /myapp/welcome .
ENTRYPOINT ["./welcome"]


