const express = require('express');
const mysql = require('mysql');

const app = express();

//conexão com o banco de dados
const connection = mysql.createConnection({
    host: 'mysql-container',
    user: 'root',
    password: 'cursosProgramacao',
    database: 'cursosProgramacao'
});

connection.connect();

app.get('/products', function(req, resp) {

    connection.query('SELECT * FROM loja', function (error, results){
        
        if (error) {
            throw error
        };
        
        resp.send(results.map(item => ({ curso: item.curso, tecnologia: item.tecnologia, nivel: item.nivel, 
            professor: item.professor, preco: item.preco})));
    });
    
});

//porta que o servidor irá "ouvir" e "responder"
app.listen(9001, '0.0.0.0', function() {
    console.log('Listening on port 9001');
})