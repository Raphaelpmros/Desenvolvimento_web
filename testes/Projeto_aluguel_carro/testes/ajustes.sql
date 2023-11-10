create table reservas(
    id_reserva int auto_increment primary key,
    carro int,
    foreign key (carro) references carros(placa),
    data_retirada date,
    data_devolucao date,
    adcionais int,
    foreign key (adcionais) references opcionais(ID_OPCIONAL),
    valor int
);

alter table opcionais add nome_mot_adcional VARCHAR(15),
                      add cnh_mot_adcional INT;


-- --ADICIONAR CHAVE ESTRANGEIRA
-- ALTER TABLE NomeDaTabela
-- ADD CONSTRAINT NomeDaChaveEstrangeira FOREIGN KEY (NomeDaColuna)
-- REFERENCES OutraTabela (ColunaReferenciada);

ALTER TABLE reservas
ADD CONSTRAINT CARRO FOREIGN KEY (CARRO) REFERENCES carros (placa);

CREATE TABLE cartao(
    NUM_CARTAO INT primary KEY,
    BANDEIRA VARCHAR(10),
    NOME_IMPRESSO_CARTAO VARCHAR(15),
    VALIDADE_CARTAO DATE,
    COD_SEGURANCA INT
);