create table user_board(
    number int not null auto_increment,
    user_id char(15) not null,
    user_name char(15) not null,
    user_content text not null,
    date datetime not null,
    page_hit int not null,
    
);
