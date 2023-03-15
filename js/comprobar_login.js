const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const app = express();

// Configurar la conexión con la base de datos
const db = mysql.createConnection({
  host: '10.4.14.130',
  user: 'prueba',
  password: 'prueba',
  database: 'ayto'
});

// Conectar con la base de datos
db.connect((err) => {
  if (err) {
    throw err;
  }
  console.log('Conexión exitosa con la base de datos MySQL');
});

// Configurar el middleware para procesar los datos del formulario
app.use(bodyParser.urlencoded({ extended: false }));

// Definir la ruta para el inicio de sesión
app.post('/index', (req, res) => {
  const username = req.body.email;
  const password = req.body.password;
  
  // Consultar la base de datos para ver si las credenciales son correctas
  db.query('SELECT * FROM usuarios WHERE username = ? AND password = ?', [username, password], (err, results) => {
    if (err) {
      throw err;
    }
    
    // Si las credenciales son correctas, redirigir al usuario a la página de inicio
    if (results.length > 0) {
      res.redirect('/inicio');
    }
    // Si las credenciales son incorrectas, mostrar un mensaje de error
    else {
      res.send('Usuario o contraseña incorrectos');
    }
  });
});

// Definir la ruta para la página de inicio
app.get('/inicio', (req, res) => {
  res.send('Bienvenido');
});

// Iniciar el servidor en el puerto 3000
app.listen(3000, () => {
  console.log('Servidor iniciado en el puerto 3000');
});
