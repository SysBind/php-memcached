<?php

/**
 * Collator class.
 */

class Memcached {

	/**
	 * Libmemcached behavior options.
	 */

	const OPT_HASH;
	
	const OPT_HASH_DEFAULT;

	const OPT_HASH_MD5;

	const OPT_HASH_CRC;
	
	const OPT_HASH_FNV1_64;

	const OPT_HASH_FNV1A_64;

	const OPT_HASH_FNV1_32;

	const OPT_HASH_FNV1A_32;

	const OPT_HASH_HSIEH;

	const OPT_HASH_MURMUR;

	const OPT_DISTRIBUTION;

	const OPT_DISTRIBUTION_MODULA;

	const OPT_DISTRIBUTION_CONSISTENT;

	const OPT_BUFER_REQUESTS;

	const OPT_BINARY_PROTOCOL;

	const OPT_NO_BLOCK;

	const OPT_TCP_NODELAY;

	const OPT_SOCKET_SEND_SIZE;

	const OPT_SOCKET_RECV_SIZE;

	const OPT_CONNECT_TIMEOUT;

	const OPT_RETRY_TIMEOUT;

	const OPT_SND_TIMEOUT;

	const OPT_RCV_TIMEOUT;

	const OPT_POLL_TIMEOUT;

	const OPT_SERVER_FAILURE_LIMIT;

	const OPT_CACHE_LOOKUPS;


	/**
	 * Class options.
	 */
	const OPT_COMPRESSION;

	const OPT_PREFIX_KEY;

	const OPT_PREFIX_KEY;


	public function __construct( $persistent_id = '' ) {}
	
	public function get( $key, &$cas_token = null, $cache_cb = null ) {}

	public function getByKey( $server_key, $key, $cache_cb = null ) {}

	public function getMulti( array $keys, &$cas_token = null, &$cas_tokens = null, $cache_cb = null ) {}

	public function getMultiByKey( $server_key, array $key, &$cas_tokens = null, $cache_cb = null ) {}

	public function getDelayed( array $keys, $with_cas = null, $cache_cb = null, $value_cb = null ) {}

	public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $cache_cb = null, $value_cb = null ) {}

	public function fetch( ) {}
	
	public function fetchAll( ) {}

	public function set( $key, $value, $expiration = 0 ) {}

	public function setByKey( $server_key, $key, $value, $expiration = 0 ) {}

	public function setMulti( $array, $expiration = 0 ) {}

	public function setMultiByKey( $server_key, $array, $expiration = 0 ) {}

	public function cas( $token, $key, $value, $expiration = 0 ) {}

	public function casByKey( $token, $server_key, $key, $value, $expiration = 0 ) {}

	public function add( $key, $value, $expiration = 0 ) {}

	public function addByKey( $server_key, $key, $value, $expiration = 0 ) {}

	public function append( $key, $value, $expiration = 0 ) {}

	public function appendByKey( $server_ke, $key, $value, $expiration = 0 ) {}

	public function prepend( $key, $value, $expiration = 0 ) {}

	public function prependByKey( $server_key, $key, $value, $expiration = 0 ) {}

	public function replace( $key, $value, $expiration = 0 ) {}

	public function replaceByKey( $serve_key, $key, $value, $expiration = 0 ) {}

	public function delete( $key, $expiration = 0 ) {}

	public function deleteByKey( $key, $expiration = 0 ) {}

	public function increment( $key, $offset = 1) {}

	public function decrement( $key, $offset = 1) {}

	public function getOption( $option ) {}
	
	public function setOption( $option, $value ) {}

	public function addServer( $host, $port,  $weight = 0 );

	public function getServerList ( ) {}

	public function getServerByKey ( $server_key ) {}

	public function flush ( ) {}

}

class MemcachedException extends Exception {

	function __construct( $errmsg = "", $errcode  = 0 ) {}

}
