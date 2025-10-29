-- Bryan Sanchez, IT202-003, Internet Applications, Unit08Exercise, bs768@njit.edu
CREATE TABLE contacts (
   id         INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name       VARCHAR(60)  NOT NULL,
   email      VARCHAR(100) NOT NULL,
   message    TEXT         NOT NULL,
   created_at TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
);