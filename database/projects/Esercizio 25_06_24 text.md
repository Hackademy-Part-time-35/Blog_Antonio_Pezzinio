Table users {
  id integer [primary key]
  name varchar
  surname varchar
  date_of_birth varchar
  email varchar
  domicile varchar
  telephone_number varchar
}

Table books {
  id integer [primary key]
  title varchar
  author varchar
  year_of_publication varchar
  quantity_in_stock integer
  
}

Table orders {
  id integer [primary key]
  user_id integer
  book_id integer
  date_order timestamp
  payment_status boolean
  shipping_city varchar
  shipping_address varchar

}

Ref: "users"."id" < "orders"."user_id"

Ref: "orders"."book_id" < "books"."id"




Table users_1 {
  id integer [primary key]
  name varchar
  email varchar
  profile_photo varchar
}

Table posts {
  id integer [primary key]
  content_post varcher
  date_pubblic timestamp
  user_id integer
}

Table likes {
  id integer [primary key]
  user_id integer
  post_id varchar
  date_like timestamp

}


Ref: "likes"."user_id" < "users_1"."id"

Ref: "likes"."post_id" < "posts"."id"

Ref: "posts"."user_id" < "users_1"."id"



Table users_2 {
  id integer [primary key]
  name varchar
  surname varchar
  date_of_birth varchar
  email varchar
  role varcher
}

Table announcements {
  id integer [primary key]
  title varchar
  description varchar
  user_id integer
  category_id integer
  date_insertion varchar
  accepted varchar
  
}

Table categorys {
  id integer [primary key]
  name varchar

}


Ref: "announcements"."user_id" < "users_2"."id"

Ref: "announcements"."category_id" < "categorys"."id"