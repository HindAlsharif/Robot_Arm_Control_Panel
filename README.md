Robot Arm Control Panel

Overview

This is a PHP project that controls a robotic arm using sliders.
It saves, displays, loads, and removes servo positions from a MySQL database.

Features
	•	6 sliders to control motor positions (0–180 degrees).
	•	Save servo positions to a database.
	•	Display saved positions in a table.
	•	Load a saved pose into the sliders.
	•	Remove a pose from the table and database.
	•	Run the current pose without showing any alert.
	•	View the current run pose and status in a simple page.
	•	Update the run status to 0 (stop) using a separate PHP file.

Technologies Used
	•	PHP
	•	MySQL
	•	HTML/CSS
	•	JavaScript
	•	Apache (XAMPP)

Usage

This project allows you to control a robot arm using a web interface.
You can move the sliders, save their values, and reuse them later with Load or delete them with Remove.
When you click Run, it updates the database with the current pose.
You can also check the current run pose and stop it using dedicated PHP scripts.

Author

Hind Ibrahim Alsharif
IT Student at Taif University
Hind Ibrahim Alsharif
IT Student at Taif University
