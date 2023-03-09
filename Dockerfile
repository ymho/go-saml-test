FROM golang:1.19-alpine
WORKDIR /app
COPY go.mod ./
COPY go.sum ./
RUN go mod download
COPY *.go ./
COPY *.crt ./
COPY *.pem ./
RUN go build -o app main.go
CMD ["/app/app"]
EXPOSE 80