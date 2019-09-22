###################
SIMPLE REST API CODEIGNITER
###################

Simple project CRUD REST API 'BLOG' with Codeigniter

1. extract project 
2. import sql in folder 'db'
3. run API with POSTMAN

*******************
Get Article
*******************

Url : http://localhost/rest_api_blog/api/Blog/
Method : GET

*******************
Add Article 
*******************

Url : http://localhost/rest_api_blog/api/Blog/addblog
Method : POST
Type : JSON (application/json)

example post:
{
	"title_blog":"Avengers End Game",
	"desc_blog":"lorem ipsum dolor",
	"imageurl":"http://googleimages.com/avengers"
}

*******************
Edit Article 
*******************

Url : http://localhost/rest_api_blog/api/Blog/editblog
Method : POST
Type : JSON (application/json)

example post:
{
	"id":"1",
	"title_blog":"Avengers End Game edit title",
	"desc_blog":"lorem ipsum dolor",
	"imageurl":"http://googleimages.com/avengers"
}

*******************
Delete Article 
*******************

Url : http://localhost/rest_api_blog/api/Blog/deleteblog
Method : POST
Type : JSON (application/json)

example post:
{
	"id":"1"
}

***************
Contact Me
***************

E-Mail : rocket.jawhead@gmail.com
Phone : +62 852 1122 3290

