<?php
if (getenv("ENABLE_S3") === "true") {
	$CONFIG = array(
		'objectstore' => array(
			"class" => "OC\\Files\\ObjectStore\\S3",
			"arguments" => array(
				"bucket" => getenv("S3_BUCKET"),
				"key" => getenv("S3_KEY"),
				"secret" => getenv("S3_SECRET"),
				"region" => getenv("S3_REGION"),
				"hostname" => getenv("S3_HOSTNAME"),
				"port" => getenv("S3_PORT"),
				"use_ssl" => getenv("S3_USE_SSL") === "true" ? true : false,
				'autocreate' => getenv("S3_AUTOCREATE") === "true" ? true : false,
				'use_path_style' => getenv("S3_USE_PATH_STYLE") === "true" ? true : false,
				'objectPrefix' => getenv("S3_OBJECT_PREFIX") ? getenv("S3_OBJECT_PREFIX") : "urn:oid:",
			),
		),
	);
}
