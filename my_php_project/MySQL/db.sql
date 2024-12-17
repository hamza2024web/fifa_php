use fifa_php ;
create table club (
    id int primary key ,
    name_club varchar(50) ,
    logo varchar(50)
);
create table nationnality (
	id int primary key ,
    name_nationnality varchar(50) ,
    flag varchar(50)
);
create table player (
	id int primary key ,
    nom_player varchar(50) ,
    positions varchar(10) ,
    rating int ,
    club_id int ,
    nationnality_id int ,
    foreign key (club_id) references club(id) ,
    foreign key (nationnality_id) references nationnality(id)
);
create table goal_kepear (
	player_id int ,
    diving int ,
    handling int ,
    kicking int ,
    positioning int , 
    reflexes int ,
    speed int ,
    foreign key (player_id) references player (id) 
);
create table no_goal_kepear (
	player_id int ,
    pace int ,
    shooting int ,
    passing int ,
    dribling int , 
    defending int ,
    physical int ,
    foreign key (player_id) references player (id) 
);
alter table player add statuus enum('principal' , 'reserve' , 'all' );
INSERT INTO nationnality (id,name_nationnality, flag) VALUES 
(1,'France', 'france_flag.png'),
(2,'Brazil', 'brazil_flag.png'),
(3,'Germany', 'germany_flag.png'),
(4,'Argentina', 'argentina_flag.png'),
(5,'Spain', 'spain_flag.png');

INSERT INTO club (id,name_club, logo) VALUES 
(1,'Paris Saint-Germain', 'psg_logo.png'),
(2,'Real Madrid', 'real_madrid_logo.png'),
(3,'Bayern Munich', 'bayern_logo.png'),
(4,'Manchester City', 'man_city_logo.png'),
(5,'Barcelona', 'barcelona_logo.png');

INSERT INTO player (id, nom_player, positions,rating , club_id, nationnality_id ,statuus) VALUES 
(1,'Kylian Mbappé', 'LW', 91, 1, 1, 'principal'),
(2,'Neymar Jr', 'RW', 89, 1, 2, 'principal'),
(3,'Lionel Messi', 'ST', 93, 2, 4, 'principal'),
(4,'Kevin De Bruyne', 'CM', 91, 4, 3, 'principal'),
(5,'Virgil van Dijk', 'LCB', 89, 5, NULL, 'principal'),
(6,'Thibaut Courtois', 'GK', 90, 2, 1, 'principal');

INSERT INTO goal_kepear (player_id, diving, handling, kicking, positioning, reflexes, speed) VALUES 
(6, 85, 82, 75, 83, 88, 76);

INSERT INTO no_goal_kepear (player_id, pace, shooting, passing, dribling, defending, physical) VALUES 
(1, 97, 90, 80, 93, 34, 75),
(2, 86, 84, 86, 94, 42, 72),
(3, 80, 94, 92, 96, 45, 70),
(4, 84, 89, 95, 88, 68, 76),
(5, 75, 65, 74, 82, 90, 88);