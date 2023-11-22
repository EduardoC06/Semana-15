CREATE TABLE tipos (
    codtip INT PRIMARY KEY,
    nomtip VARCHAR(50)
);

CREATE TABLE productos (
    codpro INT PRIMARY KEY,
    nompro VARCHAR(30), 
    prepro DECIMAL(10,2),
    canpro INT,
    fotpro VARCHAR(255),
    codtip INT,
    FOREIGN KEY (codtip) REFERENCES tipos(codtip)
);