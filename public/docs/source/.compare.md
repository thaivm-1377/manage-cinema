---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_b8a26549776bc13ed0fd6a49df203ae6 -->
## Authenticate the request for channel access.

> Example request:

```bash
curl -X POST "/broadcasting/auth" 
```
```javascript
const url = new URL("/broadcasting/auth");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST broadcasting/auth`


<!-- END_b8a26549776bc13ed0fd6a49df203ae6 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## login
> Example request:

```bash
curl -X GET -G "/login" 
```
```javascript
const url = new URL("/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## login
> Example request:

```bash
curl -X POST "/login" 
```
```javascript
const url = new URL("/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## logout
> Example request:

```bash
curl -X POST "/logout" 
```
```javascript
const url = new URL("/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "/register" 
```
```javascript
const url = new URL("/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## register
> Example request:

```bash
curl -X POST "/register" 
```
```javascript
const url = new URL("/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "/password/reset" 
```
```javascript
const url = new URL("/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "/password/email" 
```
```javascript
const url = new URL("/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "/password/reset/1" 
```
```javascript
const url = new URL("/password/reset/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "/password/reset" 
```
```javascript
const url = new URL("/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "/" 
```
```javascript
const url = new URL("/");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_568bd749946744d2753eaad6cfad5db6 -->
## logout
> Example request:

```bash
curl -X GET -G "/logout" 
```
```javascript
const url = new URL("/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET logout`


<!-- END_568bd749946744d2753eaad6cfad5db6 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET -G "/admin" 
```
```javascript
const url = new URL("/admin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## admin/users
> Example request:

```bash
curl -X GET -G "/admin/users" 
```
```javascript
const url = new URL("/admin/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_f8b3cec767336a1c2280a2a3173678d9 -->
## admin/users/{user}/edit
> Example request:

```bash
curl -X GET -G "/admin/users/1/edit" 
```
```javascript
const url = new URL("/admin/users/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{user}/edit`


<!-- END_f8b3cec767336a1c2280a2a3173678d9 -->

<!-- START_d7f417f614d8614811f624203f4e63cd -->
## admin/users/{user}
> Example request:

```bash
curl -X PUT "/admin/users/1" 
```
```javascript
const url = new URL("/admin/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT admin/users/{user}`

`PATCH admin/users/{user}`


<!-- END_d7f417f614d8614811f624203f4e63cd -->

<!-- START_d5165e9382f90b24649e6ea2a27ea85d -->
## admin/users/{user}
> Example request:

```bash
curl -X DELETE "/admin/users/1" 
```
```javascript
const url = new URL("/admin/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE admin/users/{user}`


<!-- END_d5165e9382f90b24649e6ea2a27ea85d -->

<!-- START_d1e9e1b95a199a4980bd4525fd0f38e3 -->
## admin/category
> Example request:

```bash
curl -X GET -G "/admin/category" 
```
```javascript
const url = new URL("/admin/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/category`


<!-- END_d1e9e1b95a199a4980bd4525fd0f38e3 -->

<!-- START_4c15968abacedf0b67c4df455fdb7052 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "/admin/category/create" 
```
```javascript
const url = new URL("/admin/category/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/category/create`


<!-- END_4c15968abacedf0b67c4df455fdb7052 -->

<!-- START_d44c2e0e5b3b0d2f011efe57f2d0495f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "/admin/category" 
```
```javascript
const url = new URL("/admin/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/category`


<!-- END_d44c2e0e5b3b0d2f011efe57f2d0495f -->

<!-- START_00d0fda4f2720a4ae5a8466de7b9633f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "/admin/category/1" 
```
```javascript
const url = new URL("/admin/category/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/category/{category}`


<!-- END_00d0fda4f2720a4ae5a8466de7b9633f -->

<!-- START_10a24666bb303950e581fd3d009c6f4a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "/admin/category/1/edit" 
```
```javascript
const url = new URL("/admin/category/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/category/{category}/edit`


<!-- END_10a24666bb303950e581fd3d009c6f4a -->

<!-- START_a6f8c8beca11e2374520f9fd7baf33d9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "/admin/category/1" 
```
```javascript
const url = new URL("/admin/category/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT admin/category/{category}`

`PATCH admin/category/{category}`


<!-- END_a6f8c8beca11e2374520f9fd7baf33d9 -->

<!-- START_7058a7e98365361d454ac97d3d5a839c -->
## admin/category/{category}
> Example request:

```bash
curl -X DELETE "/admin/category/1" 
```
```javascript
const url = new URL("/admin/category/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE admin/category/{category}`


<!-- END_7058a7e98365361d454ac97d3d5a839c -->

<!-- START_43ad8d21c25965365faf05e207d9e09a -->
## admin/city
> Example request:

```bash
curl -X GET -G "/admin/city" 
```
```javascript
const url = new URL("/admin/city");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/city`


<!-- END_43ad8d21c25965365faf05e207d9e09a -->

<!-- START_92a3b55547e85124a5560f17f535a4f7 -->
## admin/city/create
> Example request:

```bash
curl -X GET -G "/admin/city/create" 
```
```javascript
const url = new URL("/admin/city/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/city/create`


<!-- END_92a3b55547e85124a5560f17f535a4f7 -->

<!-- START_97f6c76ac94dbe8ad2e6c84c5b92f322 -->
## admin/city
> Example request:

```bash
curl -X POST "/admin/city" 
```
```javascript
const url = new URL("/admin/city");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/city`


<!-- END_97f6c76ac94dbe8ad2e6c84c5b92f322 -->

<!-- START_a51e83649fd62e3e86223ea4d504a46f -->
## admin/city/{city}
> Example request:

```bash
curl -X GET -G "/admin/city/1" 
```
```javascript
const url = new URL("/admin/city/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/city/{city}`


<!-- END_a51e83649fd62e3e86223ea4d504a46f -->

<!-- START_9d5f9de99d309f47817bbc61b63b75b2 -->
## admin/city/{city}/edit
> Example request:

```bash
curl -X GET -G "/admin/city/1/edit" 
```
```javascript
const url = new URL("/admin/city/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/city/{city}/edit`


<!-- END_9d5f9de99d309f47817bbc61b63b75b2 -->

<!-- START_90438afe8d147ea43fb1dff55423f4f1 -->
## admin/city/{city}
> Example request:

```bash
curl -X PUT "/admin/city/1" 
```
```javascript
const url = new URL("/admin/city/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT admin/city/{city}`

`PATCH admin/city/{city}`


<!-- END_90438afe8d147ea43fb1dff55423f4f1 -->

<!-- START_3fdf364ebbaa1fccffcd289499fb3e35 -->
## admin/city/{city}
> Example request:

```bash
curl -X DELETE "/admin/city/1" 
```
```javascript
const url = new URL("/admin/city/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE admin/city/{city}`


<!-- END_3fdf364ebbaa1fccffcd289499fb3e35 -->

<!-- START_55dd587c6b3f577a464f4cc0549bbb5a -->
## admin/district
> Example request:

```bash
curl -X GET -G "/admin/district" 
```
```javascript
const url = new URL("/admin/district");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/district`


<!-- END_55dd587c6b3f577a464f4cc0549bbb5a -->

<!-- START_8f6a4f0b60ccfabd0eea70dd5e4db789 -->
## admin/district/create
> Example request:

```bash
curl -X GET -G "/admin/district/create" 
```
```javascript
const url = new URL("/admin/district/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/district/create`


<!-- END_8f6a4f0b60ccfabd0eea70dd5e4db789 -->

<!-- START_82a24187c5a0fa8fb20334c79bf21dab -->
## admin/district
> Example request:

```bash
curl -X POST "/admin/district" 
```
```javascript
const url = new URL("/admin/district");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/district`


<!-- END_82a24187c5a0fa8fb20334c79bf21dab -->

<!-- START_dfb2f7a26756e533e5f3fef38e2406db -->
## admin/district/{district}
> Example request:

```bash
curl -X GET -G "/admin/district/1" 
```
```javascript
const url = new URL("/admin/district/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/district/{district}`


<!-- END_dfb2f7a26756e533e5f3fef38e2406db -->

<!-- START_4b3842be9bd0495ab25671aef7669c58 -->
## admin/district/{district}/edit
> Example request:

```bash
curl -X GET -G "/admin/district/1/edit" 
```
```javascript
const url = new URL("/admin/district/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/district/{district}/edit`


<!-- END_4b3842be9bd0495ab25671aef7669c58 -->

<!-- START_e3f418bab06f7fb3883db1f5c2bd3ab2 -->
## admin/district/{district}
> Example request:

```bash
curl -X PUT "/admin/district/1" 
```
```javascript
const url = new URL("/admin/district/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT admin/district/{district}`

`PATCH admin/district/{district}`


<!-- END_e3f418bab06f7fb3883db1f5c2bd3ab2 -->

<!-- START_ad23935aa2a107ac99a39594d876ada1 -->
## admin/district/{district}
> Example request:

```bash
curl -X DELETE "/admin/district/1" 
```
```javascript
const url = new URL("/admin/district/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE admin/district/{district}`


<!-- END_ad23935aa2a107ac99a39594d876ada1 -->

<!-- START_441deb8ee61b1270f6772ce1d05343ff -->
## admin/place
> Example request:

```bash
curl -X GET -G "/admin/place" 
```
```javascript
const url = new URL("/admin/place");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/place`


<!-- END_441deb8ee61b1270f6772ce1d05343ff -->

<!-- START_ba43016a99fab96db8bf1cc23d588fc2 -->
## admin/place/create
> Example request:

```bash
curl -X GET -G "/admin/place/create" 
```
```javascript
const url = new URL("/admin/place/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/place/create`


<!-- END_ba43016a99fab96db8bf1cc23d588fc2 -->

<!-- START_9010ea634b1ea4dfb3e63ad2651df75e -->
## admin/place
> Example request:

```bash
curl -X POST "/admin/place" 
```
```javascript
const url = new URL("/admin/place");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/place`


<!-- END_9010ea634b1ea4dfb3e63ad2651df75e -->

<!-- START_85cefc496a5ed6b4e7ae45d3aa9ba96a -->
## admin/place/{place}
> Example request:

```bash
curl -X GET -G "/admin/place/1" 
```
```javascript
const url = new URL("/admin/place/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/place/{place}`


<!-- END_85cefc496a5ed6b4e7ae45d3aa9ba96a -->

<!-- START_f65f19f84a0e3697224bcd204a76b4fb -->
## admin/place/{place}/edit
> Example request:

```bash
curl -X GET -G "/admin/place/1/edit" 
```
```javascript
const url = new URL("/admin/place/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/place/{place}/edit`


<!-- END_f65f19f84a0e3697224bcd204a76b4fb -->

<!-- START_2373113e6921234d814d2a4598d7da75 -->
## admin/place/{place}
> Example request:

```bash
curl -X PUT "/admin/place/1" 
```
```javascript
const url = new URL("/admin/place/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT admin/place/{place}`

`PATCH admin/place/{place}`


<!-- END_2373113e6921234d814d2a4598d7da75 -->

<!-- START_092fe55b0e65a3ec2d3988c27feb6705 -->
## admin/place/{place}
> Example request:

```bash
curl -X DELETE "/admin/place/1" 
```
```javascript
const url = new URL("/admin/place/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE admin/place/{place}`


<!-- END_092fe55b0e65a3ec2d3988c27feb6705 -->

<!-- START_33d170024dcd4758e047915626d26f5e -->
## admin/listplace
> Example request:

```bash
curl -X GET -G "/admin/listplace" 
```
```javascript
const url = new URL("/admin/listplace");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/listplace`


<!-- END_33d170024dcd4758e047915626d26f5e -->

<!-- START_ac39ad6001b26733642b414bd0c760a3 -->
## admin/previewplade/{id}
> Example request:

```bash
curl -X GET -G "/admin/previewplade/1" 
```
```javascript
const url = new URL("/admin/previewplade/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/previewplade/{id}`


<!-- END_ac39ad6001b26733642b414bd0c760a3 -->

<!-- START_d00b45e914e6efc877e8988938319997 -->
## admin/deleteplace
> Example request:

```bash
curl -X POST "/admin/deleteplace" 
```
```javascript
const url = new URL("/admin/deleteplace");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/deleteplace`


<!-- END_d00b45e914e6efc877e8988938319997 -->

<!-- START_b3f7698bc70a55928aa4d8cdd4025260 -->
## admin/appoveplace
> Example request:

```bash
curl -X POST "/admin/appoveplace" 
```
```javascript
const url = new URL("/admin/appoveplace");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/appoveplace`


<!-- END_b3f7698bc70a55928aa4d8cdd4025260 -->

<!-- START_71a6be7f5ca5e33f8f6c87ba685e03cf -->
## admin/reports
> Example request:

```bash
curl -X GET -G "/admin/reports" 
```
```javascript
const url = new URL("/admin/reports");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/reports`


<!-- END_71a6be7f5ca5e33f8f6c87ba685e03cf -->

<!-- START_67374cd73463e64f3d8d61ca8ea12e9b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "/admin/reports/create" 
```
```javascript
const url = new URL("/admin/reports/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/reports/create`


<!-- END_67374cd73463e64f3d8d61ca8ea12e9b -->

<!-- START_3706d2f688eede14c370e0157fc5e1d4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "/admin/reports/1" 
```
```javascript
const url = new URL("/admin/reports/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/reports/{report}`


<!-- END_3706d2f688eede14c370e0157fc5e1d4 -->

<!-- START_d2cec472e9630f5c9b42390c7c1c5b7d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "/admin/reports/1/edit" 
```
```javascript
const url = new URL("/admin/reports/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET admin/reports/{report}/edit`


<!-- END_d2cec472e9630f5c9b42390c7c1c5b7d -->

<!-- START_48aa2968b07e99e872299544b416de62 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "/admin/reports/1" 
```
```javascript
const url = new URL("/admin/reports/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT admin/reports/{report}`

`PATCH admin/reports/{report}`


<!-- END_48aa2968b07e99e872299544b416de62 -->

<!-- START_eb466cd04b8d28c549344fd68a87c2df -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "/admin/reports/1" 
```
```javascript
const url = new URL("/admin/reports/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE admin/reports/{report}`


<!-- END_eb466cd04b8d28c549344fd68a87c2df -->

<!-- START_d8c27ec1f587088d9ad026bc694814a1 -->
## admin/approve
> Example request:

```bash
curl -X POST "/admin/approve" 
```
```javascript
const url = new URL("/admin/approve");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST admin/approve`


<!-- END_d8c27ec1f587088d9ad026bc694814a1 -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "/home" 
```
```javascript
const url = new URL("/home");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_2e6cc1e8215e776dc4e7d1e9b2752880 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "/member" 
```
```javascript
const url = new URL("/member");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member`


<!-- END_2e6cc1e8215e776dc4e7d1e9b2752880 -->

<!-- START_e7d0a919bb61336101a87535879b2070 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "/member/home" 
```
```javascript
const url = new URL("/member/home");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/home`


<!-- END_e7d0a919bb61336101a87535879b2070 -->

<!-- START_07071fdcf0de0d1c66c3ecf9164d2c56 -->
## member/search
> Example request:

```bash
curl -X GET -G "/member/search" 
```
```javascript
const url = new URL("/member/search");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/search`


<!-- END_07071fdcf0de0d1c66c3ecf9164d2c56 -->

<!-- START_d070960171c1cca7b0bff9f7073f8886 -->
## member/reviews/create
> Example request:

```bash
curl -X GET -G "/member/reviews/create" 
```
```javascript
const url = new URL("/member/reviews/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/reviews/create`


<!-- END_d070960171c1cca7b0bff9f7073f8886 -->

<!-- START_ca536175951049a8a9452a72db5370f2 -->
## member/reviews
> Example request:

```bash
curl -X POST "/member/reviews" 
```
```javascript
const url = new URL("/member/reviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/reviews`


<!-- END_ca536175951049a8a9452a72db5370f2 -->

<!-- START_30e830e1afd4ba434a16b69310b716a9 -->
## member/reviews/{review}
> Example request:

```bash
curl -X GET -G "/member/reviews/1" 
```
```javascript
const url = new URL("/member/reviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/reviews/{review}`


<!-- END_30e830e1afd4ba434a16b69310b716a9 -->

<!-- START_431fbcce033e17489cf63237b8d94525 -->
## member/reviews/{review}/edit
> Example request:

```bash
curl -X GET -G "/member/reviews/1/edit" 
```
```javascript
const url = new URL("/member/reviews/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/reviews/{review}/edit`


<!-- END_431fbcce033e17489cf63237b8d94525 -->

<!-- START_f3b369d2c597bebb89e5a6bb32b93cee -->
## member/reviews/{review}
> Example request:

```bash
curl -X PUT "/member/reviews/1" 
```
```javascript
const url = new URL("/member/reviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT member/reviews/{review}`

`PATCH member/reviews/{review}`


<!-- END_f3b369d2c597bebb89e5a6bb32b93cee -->

<!-- START_10679013d8edef3871491127e572f7d8 -->
## member/collection
> Example request:

```bash
curl -X POST "/member/collection" 
```
```javascript
const url = new URL("/member/collection");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/collection`


<!-- END_10679013d8edef3871491127e572f7d8 -->

<!-- START_e5250f6a6a823d9f6ef5176398c7676c -->
## member/removereview
> Example request:

```bash
curl -X POST "/member/removereview" 
```
```javascript
const url = new URL("/member/removereview");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/removereview`


<!-- END_e5250f6a6a823d9f6ef5176398c7676c -->

<!-- START_4710035196382512f906558e67c5e9f4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "/member/sendreport" 
```
```javascript
const url = new URL("/member/sendreport");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/sendreport`


<!-- END_4710035196382512f906558e67c5e9f4 -->

<!-- START_b361f8b8f7740150abf98650bad76bea -->
## member/addplace
> Example request:

```bash
curl -X POST "/member/addplace" 
```
```javascript
const url = new URL("/member/addplace");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/addplace`


<!-- END_b361f8b8f7740150abf98650bad76bea -->

<!-- START_4df2e7ecd0f96245a4577dbbace8926b -->
## member/likereviews
> Example request:

```bash
curl -X POST "/member/likereviews" 
```
```javascript
const url = new URL("/member/likereviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/likereviews`


<!-- END_4df2e7ecd0f96245a4577dbbace8926b -->

<!-- START_3609b9596578fae6d6af4f42711f8161 -->
## member/deleteimage
> Example request:

```bash
curl -X POST "/member/deleteimage" 
```
```javascript
const url = new URL("/member/deleteimage");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/deleteimage`


<!-- END_3609b9596578fae6d6af4f42711f8161 -->

<!-- START_b54cc16da6263917e324527a237f8c56 -->
## member/comment
> Example request:

```bash
curl -X POST "/member/comment" 
```
```javascript
const url = new URL("/member/comment");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/comment`


<!-- END_b54cc16da6263917e324527a237f8c56 -->

<!-- START_3564cb5f1cded1252ef8461812def52f -->
## member/updatecomment
> Example request:

```bash
curl -X POST "/member/updatecomment" 
```
```javascript
const url = new URL("/member/updatecomment");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/updatecomment`


<!-- END_3564cb5f1cded1252ef8461812def52f -->

<!-- START_452088f5c9ad93a5ac5ffa71a3db13e1 -->
## member/deletecomment
> Example request:

```bash
curl -X POST "/member/deletecomment" 
```
```javascript
const url = new URL("/member/deletecomment");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/deletecomment`


<!-- END_452088f5c9ad93a5ac5ffa71a3db13e1 -->

<!-- START_0b191ac7193eda5f7b434b2889eb67c6 -->
## member/reviews/{id}/collection
> Example request:

```bash
curl -X GET -G "/member/reviews/1/collection" 
```
```javascript
const url = new URL("/member/reviews/1/collection");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/reviews/{id}/collection`


<!-- END_0b191ac7193eda5f7b434b2889eb67c6 -->

<!-- START_6db4b8438893181342a4e2e759c630e0 -->
## member/removecolection
> Example request:

```bash
curl -X POST "/member/removecolection" 
```
```javascript
const url = new URL("/member/removecolection");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/removecolection`


<!-- END_6db4b8438893181342a4e2e759c630e0 -->

<!-- START_8bc0c403b6a346a921347659f8af7d41 -->
## member/reviews/{id}/save/{collection_id}
> Example request:

```bash
curl -X GET -G "/member/reviews/1/save/1" 
```
```javascript
const url = new URL("/member/reviews/1/save/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/reviews/{id}/save/{collection_id}`


<!-- END_8bc0c403b6a346a921347659f8af7d41 -->

<!-- START_33785bb1ccd00a8aa3a213ae1b324f80 -->
## member/showplace/{id}
> Example request:

```bash
curl -X GET -G "/member/showplace/1" 
```
```javascript
const url = new URL("/member/showplace/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/showplace/{id}`


<!-- END_33785bb1ccd00a8aa3a213ae1b324f80 -->

<!-- START_7731fcbf183d665ccad0a8c65b4ad258 -->
## member/editplace/{id}
> Example request:

```bash
curl -X GET -G "/member/editplace/1" 
```
```javascript
const url = new URL("/member/editplace/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/editplace/{id}`


<!-- END_7731fcbf183d665ccad0a8c65b4ad258 -->

<!-- START_72e770278e0a0104054d3130b747dbbe -->
## member/uploadplace/{id}
> Example request:

```bash
curl -X POST "/member/uploadplace/1" 
```
```javascript
const url = new URL("/member/uploadplace/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/uploadplace/{id}`


<!-- END_72e770278e0a0104054d3130b747dbbe -->

<!-- START_49137ea0f675cf09e2b92d17f92f5de6 -->
## member/topweek
> Example request:

```bash
curl -X GET -G "/member/topweek" 
```
```javascript
const url = new URL("/member/topweek");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/topweek`


<!-- END_49137ea0f675cf09e2b92d17f92f5de6 -->

<!-- START_247e93a9e82d33256aad29bbbef5ec9a -->
## member/category/{id}
> Example request:

```bash
curl -X GET -G "/member/category/1" 
```
```javascript
const url = new URL("/member/category/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/category/{id}`


<!-- END_247e93a9e82d33256aad29bbbef5ec9a -->

<!-- START_55e82e4810374afe22496ac5c5fe6ec6 -->
## member/user/edit/{id}
> Example request:

```bash
curl -X GET -G "/member/user/edit/1" 
```
```javascript
const url = new URL("/member/user/edit/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/user/edit/{id}`


<!-- END_55e82e4810374afe22496ac5c5fe6ec6 -->

<!-- START_64322d82812f9225273e27f92d807cfc -->
## member/user/edit/{id}
> Example request:

```bash
curl -X POST "/member/user/edit/1" 
```
```javascript
const url = new URL("/member/user/edit/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/user/edit/{id}`


<!-- END_64322d82812f9225273e27f92d807cfc -->

<!-- START_968f23c853805ea7aa5c349f67946442 -->
## member/user/wall/{id}
> Example request:

```bash
curl -X GET -G "/member/user/wall/1" 
```
```javascript
const url = new URL("/member/user/wall/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/user/wall/{id}`


<!-- END_968f23c853805ea7aa5c349f67946442 -->

<!-- START_c0ffb1454ddac7167e457ce0cbbaf1c0 -->
## member/user/collection/{id}
> Example request:

```bash
curl -X GET -G "/member/user/collection/1" 
```
```javascript
const url = new URL("/member/user/collection/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET member/user/collection/{id}`


<!-- END_c0ffb1454ddac7167e457ce0cbbaf1c0 -->

<!-- START_b162fb04e18a272083c8c887a3bb4406 -->
## member/user/follow
> Example request:

```bash
curl -X POST "/member/user/follow" 
```
```javascript
const url = new URL("/member/user/follow");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/user/follow`


<!-- END_b162fb04e18a272083c8c887a3bb4406 -->

<!-- START_dfb36a913d7b0d28dbf7f5382e9028e5 -->
## member/user/unfollow
> Example request:

```bash
curl -X POST "/member/user/unfollow" 
```
```javascript
const url = new URL("/member/user/unfollow");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/user/unfollow`


<!-- END_dfb36a913d7b0d28dbf7f5382e9028e5 -->

<!-- START_7a49980d767785b8cfa793272939ab37 -->
## member/notifications/changestatus
> Example request:

```bash
curl -X POST "/member/notifications/changestatus" 
```
```javascript
const url = new URL("/member/notifications/changestatus");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST member/notifications/changestatus`


<!-- END_7a49980d767785b8cfa793272939ab37 -->

<!-- START_6ff6dfcfba0a4794b861943e9b15a908 -->
## get-places
> Example request:

```bash
curl -X GET -G "/get-places" 
```
```javascript
const url = new URL("/get-places");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET get-places`


<!-- END_6ff6dfcfba0a4794b861943e9b15a908 -->

<!-- START_ca96221d3895cb4665a7e55fd271c1cf -->
## get-dists
> Example request:

```bash
curl -X GET -G "/get-dists" 
```
```javascript
const url = new URL("/get-dists");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET get-dists`


<!-- END_ca96221d3895cb4665a7e55fd271c1cf -->


