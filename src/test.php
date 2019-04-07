<?php

function get_file_ext($file){
	return strtolower(pathinfo($file, PATHINFO_EXTENSION));
}

