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
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `position` varchar(255),
  `birth_date` timestamp,
  `about` text,
  `cv_link` varchar(255)
);

CREATE TABLE `education` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `start_date` timestamp NOT NULL,
  `end_date` timestamp NOT NULL,
  `description` text
);

CREATE TABLE `experience` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `start_date` timestamp NOT NULL,
  `end_date` timestamp NOT NULL,
  `description` text
);

CREATE TABLE `employers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `owned_jobs` int,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `start_date` timestamp NOT NULL,
  `teamsize` int,
  `about` text
);

CREATE TABLE `social_media` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `employer_id` int NOT NULL,
  `twitter` varchar(255),
  `facebook` varchar(255),
  `instagram` varchar(255),
  `youtube` varchar(255)
);

CREATE TABLE `jobs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `employer_id` int NOT NULL,
  `category_id` int NOT NULL,
  `position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `applications_amount` int,
  `created_at` timestamp NOT NULL,
  `expire_at` timestamp NOT NULL,
  `workload` varchar(255) NOT NULL,
  `description` text,
  `salary_start` int,
  `salary_end` int,
  `min_exp` int,
  `required_skills` text,
  `nice_to_have_skills` text
);

CREATE TABLE `category_industry` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `category_helper` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `job_id` int,
  `user_id` int
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
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `sender` int NOT NULL,
  `reciver` int NOT NULL,
  `created_at` timestamp NOT NULL
);

CREATE TABLE `contact_info` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `email` varchar(255),
  `phone` varchar(255),
  `website` varchar(255)
);

ALTER TABLE `messages` ADD FOREIGN KEY (`reciver`) REFERENCES `users` (`id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`sender`) REFERENCES `users` (`id`);

ALTER TABLE `contact_info` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `category_helper` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `employers` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `jobs` ADD FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

ALTER TABLE `social_media` ADD FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

ALTER TABLE `candidates` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `favorites_jobs` ADD FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

ALTER TABLE `applied_jobs` ADD FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

ALTER TABLE `education` ADD FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

ALTER TABLE `experience` ADD FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

ALTER TABLE `applied_jobs` ADD FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

ALTER TABLE `favorites_jobs` ADD FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

ALTER TABLE `category_helper` ADD FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

ALTER TABLE `category_helper` ADD FOREIGN KEY (`category_id`) REFERENCES `category_industry` (`id`);
