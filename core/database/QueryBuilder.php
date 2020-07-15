<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function insert($table, $parameters) 
    {
            // $sql = sprintf(
            //     'INSERT INTO %s (%s) VALUES(%s)',
            //     $table,
            //     implode(', ', array_keys($parameters)),
            //     ':' . implode(', :', array_keys($parameters))
            // );
            
           // die(var_dump($sql));

           $sql = "INSERT INTO $table (description, completed)
                    VALUES(?,?)";
           
          // die(var_dump($sql));
            try {
                $stmt= $this->pdo->prepare($sql);
                $stmt->execute($parameters);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
    }

    public function selectAll($table)
    {
        // why does it need $this?
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        // We now need to set this value for the $intoClass variable
        // This gets set in the  index.php file.
        return $statement->fetchAll((PDO::FETCH_CLASS));
    }

}