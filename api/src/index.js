//import 
const express = require('express');
const mysql = require('mysql');

//instanciando o express
const app = express();

//conexao com o banco de dados
const connection = mysql.createConnection({
    host: 'mysql-container',
    user: 'root',
    password: 'cursosProgramacao',
    database: 'cursosProgramacao'
});

connection.connect();

//rota do express para responder quando utilizarmos o path /loja
app.get('/loja', function(req, resp) {

    connection.query('SELECT * FROM loja', function (error, results){
        
        if (error) {
            throw error
        };
        
        resp.send(results.map(item => ({ curso: item.curso, tecnologia: item.tecnologia, nivel: item.nivel, 
            professor: item.professor, preco: item.preco})));
    });
    
});

//porta que a aplicacao vai estar "ouvindo" e "respondendo"
app.listen(9001, '0.0.0.0', function() {
    console.log('Listening on port 9001');
})