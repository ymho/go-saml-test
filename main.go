package main

import (
	"log"
	"net/http"

	"github.com/ymho/go-saml-test/api"
)

func main() {
	r := api.NewRouter()
	log.Println("server start at port 80")
	log.Fatal(http.ListenAndServe(":80", r))
}
