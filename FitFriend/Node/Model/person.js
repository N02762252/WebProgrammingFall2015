var mysql = require("mysql");

module.exports =  {
    get: function(id, ret){
        var conn = GetConnection();
        var sql = 'SELECT * FROM FitFriend_Users ';
        if(id){
          sql += " WHERE id = " + id;
        }
        conn.query(sql, function(err,rows){
          if(err) throw err;
          ret(rows);
          conn.end();
        });        
    },
    delete: function(id, ret){
        var conn = GetConnection();
        conn.query('SELECT * FROM FitFriend_Users',function(err,rows){
          if(err) throw err;
          ret(rows);
          conn.end();
        });        
    },
    save: function(row, ret){
        var conn = GetConnection();
        conn.query('SELECT * FitFriend_Users',function(err,rows){
          if(err) throw err;
          ret(rows);
          conn.end();
        });        
    },
    validate: function(row){
      var errors = {};
      
      if(!row.Name) errors.Name = "is required"; 
      
      return errors.length ? errors : false;
    }
};  

function GetConnection(){
        var conn = mysql.createConnection({
          host: "localhost",
          user: "drewrob26",
          password: "12321",
          database: "c9"
        });
    return conn;
}