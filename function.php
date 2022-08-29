<?php

class Handle() {
	// Get profile
	public function getProfile($user_id) {
		$data = null;
		$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
		$result = $this->connection->query($sql);

		if ($result) {
			while ($row = $result->fetch()) {
				$data[] = $row;
			}
			return $data;
		}
	}

	// 	Insert Comment
	public function insertComment($user_id, $movie_id, $content, $date) {
		$sql = "INSERT INTO comments (user_id, movie_id, content, date)
				VALUES ('$user_id', '$movie_id', '$content', '$date')";
		$result = $this->connection->query($sql);
	}

	// Get comments 
	public function getComment($id) {
		$data = null;
		$sql = "SELECT * FROM comments 
			JOIN movies ON comments.movie_id = movie_id
			JOIN users ON comments.user_id = user_id
			WHERE comments.movie_id = '$id'";
		$result = $this->connection->query($sql);
		if($result->num_rows() > 0) {
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}
}