DROP TABLE IF EXISTS articles;
CREATE TABLE articles (
      id integer primary key,
      title text NOT NULL,
      url text NOT NULL,
      date date NOT NULL
);

INSERT INTO articles (id, title, url, date) VALUES 
(3, 'Search and integrate Google+ activity streams with PHP applications', 
    'http://www.ibm.com/developerworks/xml/library/x-googleplusphp/index.html', '2012-07-10');

INSERT INTO articles (id, title, url, date) VALUES 
(4, 'Getting Started with Zend Server CE', 
    'http://devzone.zend.com/1389/getting-started-with-zend-server-ce/', '2009-03-02');

INSERT INTO articles (id, title, url, date) VALUES
(5, 'MySQK - SQLite - Postgresql', 
    'www.yahoo.co.jp', '2017-06-22');

