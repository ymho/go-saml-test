package api

import (
	"fmt"
	"net/http"

	"github.com/crewjam/saml/samlsp"
	"github.com/gorilla/mux"
	"github.com/ymho/go-saml-test/api/middleware"
)

func hello(w http.ResponseWriter, r *http.Request) {
	fmt.Fprintf(w, "Hello, %s, %s!", samlsp.AttributeFromContext(r.Context(), "urn:oid:0.9.2342.19200300.100.1.1"), samlsp.SessionFromContext(r.Context()))
}

func NewRouter() *mux.Router {
	r := mux.NewRouter()
	samlSP := middleware.NewSamlSP()

	app := http.HandlerFunc(hello)
	r.Handle("/hello", samlSP.RequireAccount(app))
	r.HandleFunc("/saml/acs", samlSP.ServeACS)
	r.HandleFunc("/saml/metadata", samlSP.ServeMetadata)
	return r
}
