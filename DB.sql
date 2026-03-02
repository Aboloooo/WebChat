DROP DATABASE IF EXISTS Webchat_2026;
CREATE DATABASE Webchat_2026;
USE Webchat_2026;

-- First create Users without the circular dependency
CREATE TABLE Users(
    UserID int PRIMARY KEY AUTO_INCREMENT,
    Fullname VARCHAR(100) NOT NULL,
    Username VARCHAR(255) UNIQUE NOT NULL,
    Email VARCHAR(255) not null,
    Password VARCHAR(255)
);

CREATE TABLE Message(
    Message_ID INT NOT NULL PRIMARY KEY,
    Message_content VARCHAR(255),
    Sender_ID int,
    isViewed ENUM('unseen', 'seen') DEFAULT 'unseen',
    FOREIGN KEY (Sender_ID) REFERENCES Users(UserID)
)