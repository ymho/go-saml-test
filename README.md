```
openssl req -x509 -sha256 -nodes -days 3650 -newkey rsa:2048 -subj /CN=sp.example.org -keyout sp.example.org.key -out sp.example.org.crt
openssl req -x509 -sha256 -nodes -days 3650 -newkey rsa:2048 -subj /CN=idp.example.com -keyout idp.example.com.key -out idp.example.com.crt
cp idp.example.com.* ./proxy/cert/
cp idp.example.com.* ./saml-idp/cert/
cp sp.example.org.* ./proxy/cert/
```

```
ユーザを SAML 認証フローにリダイレクトする際、ミドルウェアは、"saml_"で始まるランダムな名前の一時的なクッキーを割り当てます。クッキーの値は、要求された元の URL と SAML 要求 ID を含む署名付き JSON Web トークンである。名前のランダムな部分は、SAMLフローで渡されたRelayStateパラメータに対応します。SAML レスポンスの検証時に、RelayState を使用して正しい cookie を検索し、SAML リクエスト ID を検証して、ユーザを元の URL にリダイレクトします。SAML フローが成功すると、セッション・クッキーとして JSON Web Token (JWT) が発行され、セッションが確立される。JWT トークンには、SAML アサーションからの認証済み属性が含まれる。ミドルウェアは、有効なセッション JWT を持つリクエストを受信すると、SAML 属性を抽出して http.Request オブジェクトを変更し、最初の SAML アサーションからの属性を含む Context オブジェクトをリクエストコンテキストに追加します。JSON Web トークンを発行する場合、署名キーが必要です。SAML サービス・プロバイダはすでに秘密鍵を持っているため、その鍵を借りて JWT にも署名します。
```

```

```