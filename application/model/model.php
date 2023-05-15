<?php

class Model {

	public $dbhandle;

	public function __construct()
	{
		$dsn = "sqlite:db/db.db";

		try {
			$this->dbhandle = new PDO($dsn, "user", "password", array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::ATTR_PERSISTENT => true,));
		}
		catch(PDOException $e) {
			print new Exception($e->getMessage());
		}
	}

	public function buildDB()
	{
		$json = file_get_contents("json/data.json");
		$json_data = json_decode($json);
		$home_data = $json_data->homeData;
		$drinks_data = $json_data->drinksData;
		$misc_data = $json_data->miscData;
		$gallery_data = $json_data->galleryData;

		try{
			$this->dbhandle->exec(
				"DROP TABLE IF EXISTS Home_Data; " .
				"DROP TABLE IF EXISTS Drinks_Data; " .
				"DROP TABLE IF EXISTS Misc_Data; " .
				"DROP TABLE IF EXISTS Gallery_Data");
			$this->dbhandle->exec(
				"CREATE TABLE Home_Data (Id INTEGER PRIMARY KEY, title TEXT, subTitle TEXT, description TEXT, image TEXT, modelhref TEXT, url TEXT); " .
				"CREATE TABLE Drinks_Data (Id INTEGER PRIMARY KEY, modelTitle TEXT, creationMethod TEXT, title TEXT, subTitle TEXT, description TEXT, model TEXT, url TEXT); " .
				"CREATE TABLE Misc_Data (Id INTEGER PRIMARY KEY, title TEXT, description TEXT); " .
				"CREATE TABLE Gallery_Data (Id INTEGER PRIMARY KEY, name TEXT, image TEXT); ");

			foreach ($home_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Home_Data (Id, title, subTitle, description, image, modelhref, url) VALUES (?, ?, ?, ?, ?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->title);
				$add_statement->bindParam(3, $value->subTitle);
				$add_statement->bindParam(4, $value->description);
				$add_statement->bindParam(5, $value->image);
				$add_statement->bindParam(6, $value->modelhref);
				$add_statement->bindParam(7, $value->url);
				$add_statement->execute();
			}

			foreach ($drinks_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Drinks_Data (Id, modelTitle, creationMethod, title, subTitle, description, model, url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->modelTitle);
				$add_statement->bindParam(3, $value->creationMethod);
				$add_statement->bindParam(4, $value->title);
				$add_statement->bindParam(5, $value->subTitle);
				$add_statement->bindParam(6, $value->description);
				$add_statement->bindParam(7, $value->model);
				$add_statement->bindParam(8, $value->url);
				$add_statement->execute();
			}

			foreach ($misc_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Misc_Data (Id, title, description) VALUES (?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->title);
				$add_statement->bindParam(3, $value->description);
				$add_statement->execute();
			}

			foreach ($gallery_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Gallery_Data (Id, name, image) VALUES (?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->name);
				$add_statement->bindParam(3, $value->image);
				$add_statement->execute();
			}
			return "All data from data.json inserted successfully inside db.db";
		}
		catch(PDOException $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetHomeData(){
		try{
			$result = null;
			$statement = $this->dbhandle->query("SELECT * FROM Home_Data");

			$i = 0;	
			while ($data = $statement->fetch()) {
				$result[$i]["title"] = $data["title"];
				$result[$i]["subTitle"] = $data["subTitle"];
				$result[$i]["description"] = $data["description"];
				$result[$i]["image"] = $data["image"];
				$result[$i]["modelhref"] = $data["modelhref"];
				$result[$i]["url"] = $data["url"];
				$i++;
			}
		}
		catch (PDOException $e) {
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;
		return $result;
	}

		public function dbGetDrinksData(){
		try{
			$result = null;
			$statement = $this->dbhandle->query("SELECT * FROM Drinks_Data");

			$i = 0;	
			while ($data = $statement->fetch()) {
				$result["drinksData"][$i]["modelTitle"] = $data["modelTitle"];
				$result["drinksData"][$i]["creationMethod"] = $data["creationMethod"];
				$result["drinksData"][$i]["title"] = $data["title"];
				$result["drinksData"][$i]["subTitle"] = $data["subTitle"];
				$result["drinksData"][$i]["description"] = $data["description"];
				$result["drinksData"][$i]["model"] = $data["model"];
				$result["drinksData"][$i]["url"] = $data["url"];
				$i++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Misc_Data");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["miscData"][$j]["title"] = $data["title"];
				$result["miscData"][$j]["description"] = $data["description"];
				$j++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Gallery_Data");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["galleryData"][$j]["name"] = $data["name"];
				$result["galleryData"][$j]["image"] = $data["image"];
				$j++;
			}
		}
		catch (PDOException $e) {
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;
		return $result;
	}
}

?>