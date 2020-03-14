CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(255) UNIQUE NOT NULL,
  `email` varchar(255) UNIQUE NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `thumbnail` varchar(255),
  `activated` boolean NOT NULL,
  `user_type` int NOT NULL,
  `created_at` timestamp NOT NULL
);

CREATE TABLE `candidates` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `cv_link` varchar(255),
  `candidate_info` int
);

CREATE TABLE `employers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `owned_jobs` int,
  `employers_info` int
);

CREATE TABLE `jobs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `employer_id` int NOT NULL,
  `job_info` int,
  `category_id` int NOT NULL
);

CREATE TABLE `category` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `favorites_jobs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `job_id` int NOT NULL,
  `candidate_id` int NOT NULL
);

CREATE TABLE `applied_jobs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `job_id` int NOT NULL,
  `candidate_id` int NOT NULL
);

CREATE TABLE `messages` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `sender` int NOT NULL,
  `reciver` int NOT NULL,
  `created_at` timestamp NOT NULL
);

ALTER TABLE `users` ADD FOREIGN KEY (`id`) REFERENCES `candidates` (`user_id`);

ALTER TABLE `users` ADD FOREIGN KEY (`id`) REFERENCES `employers` (`user_id`);

ALTER TABLE `jobs` ADD FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

ALTER TABLE `jobs` ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE `favorites_jobs` ADD FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

ALTER TABLE `favorites_jobs` ADD FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

ALTER TABLE `applied_jobs` ADD FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

ALTER TABLE `applied_jobs` ADD FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`reciver`) REFERENCES `users` (`id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`sender`) REFERENCES `users` (`id`);
