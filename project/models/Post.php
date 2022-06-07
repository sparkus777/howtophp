<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Post extends Model
	{
		public function getById($id)
		{
			return $this->findOne("SELECT * FROM posts WHERE id=$id");
		}
		
		public function getAll()
		{
			return $this->findMany("SELECT id, title, content, date_created FROM posts");
		}
        public function insert(){
            return $this->insertOne("INSERT INTO blog_slavika.posts SET title = '" . $_POST['title'] . "', content = '" . $_POST['content'] . "', date_created = NOW()");
        }
        public function delete(){
            return $this->deleteOne("DELETE FROM blog_slavika.posts WHERE id = '".$_GET['id']."'");
        }

        public function update(){
            return $this->updateOne("UPDATE blog_slavika.posts SET title = '" . $_POST['title'] . "', content = '" . $_POST['content'] . "', date_created = NOW() WHERE id = '". $_POST['id']."'");
        }
	}
