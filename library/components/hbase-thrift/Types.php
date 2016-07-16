<?php
#namespace \;

/**
 * Autogenerated by Thrift Compiler (0.9.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class TCell extends TBase {
  static $_TSPEC;

  public $value = null;
  public $timestamp = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'timestamp',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'TCell';
  }

  public function read($input)
  {
    return $this->_read('TCell', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('TCell', self::$_TSPEC, $output);
  }
}

class ColumnDescriptor extends TBase {
  static $_TSPEC;

  public $name = null;
  public $maxVersions = 3;
  public $compression = "NONE";
  public $inMemory = false;
  public $bloomFilterType = "NONE";
  public $bloomFilterVectorSize = 0;
  public $bloomFilterNbHashes = 0;
  public $blockCacheEnabled = false;
  public $timeToLive = -1;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'maxVersions',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'compression',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'inMemory',
          'type' => TType::BOOL,
          ),
        5 => array(
          'var' => 'bloomFilterType',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'bloomFilterVectorSize',
          'type' => TType::I32,
          ),
        7 => array(
          'var' => 'bloomFilterNbHashes',
          'type' => TType::I32,
          ),
        8 => array(
          'var' => 'blockCacheEnabled',
          'type' => TType::BOOL,
          ),
        9 => array(
          'var' => 'timeToLive',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ColumnDescriptor';
  }

  public function read($input)
  {
    return $this->_read('ColumnDescriptor', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ColumnDescriptor', self::$_TSPEC, $output);
  }
}

class TRegionInfo extends TBase {
  static $_TSPEC;

  public $startKey = null;
  public $endKey = null;
  public $id = null;
  public $name = null;
  public $version = null;
  public $serverName = null;
  public $port = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'startKey',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'endKey',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'id',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'version',
          'type' => TType::BYTE,
          ),
        6 => array(
          'var' => 'serverName',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'port',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'TRegionInfo';
  }

  public function read($input)
  {
    return $this->_read('TRegionInfo', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('TRegionInfo', self::$_TSPEC, $output);
  }
}

class Mutation extends TBase {
  static $_TSPEC;

  public $isDelete = false;
  public $column = null;
  public $value = null;
  public $writeToWAL = true;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'isDelete',
          'type' => TType::BOOL,
          ),
        2 => array(
          'var' => 'column',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'writeToWAL',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'Mutation';
  }

  public function read($input)
  {
    return $this->_read('Mutation', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('Mutation', self::$_TSPEC, $output);
  }
}

class BatchMutation extends TBase {
  static $_TSPEC;

  public $row = null;
  public $mutations = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'row',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'mutations',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Mutation',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'BatchMutation';
  }

  public function read($input)
  {
    return $this->_read('BatchMutation', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('BatchMutation', self::$_TSPEC, $output);
  }
}

class TIncrement extends TBase {
  static $_TSPEC;

  public $table = null;
  public $row = null;
  public $column = null;
  public $ammount = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'table',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'row',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'column',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'ammount',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'TIncrement';
  }

  public function read($input)
  {
    return $this->_read('TIncrement', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('TIncrement', self::$_TSPEC, $output);
  }
}

class TRowResult extends TBase {
  static $_TSPEC;

  public $row = null;
  public $columns = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'row',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'columns',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRUCT,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRUCT,
            'class' => '\TCell',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'TRowResult';
  }

  public function read($input)
  {
    return $this->_read('TRowResult', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('TRowResult', self::$_TSPEC, $output);
  }
}

class TScan extends TBase {
  static $_TSPEC;

  public $startRow = null;
  public $stopRow = null;
  public $timestamp = null;
  public $columns = null;
  public $caching = null;
  public $filterString = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'startRow',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'stopRow',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'timestamp',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'columns',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        5 => array(
          'var' => 'caching',
          'type' => TType::I32,
          ),
        6 => array(
          'var' => 'filterString',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'TScan';
  }

  public function read($input)
  {
    return $this->_read('TScan', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('TScan', self::$_TSPEC, $output);
  }
}

class IOError extends TException {
  static $_TSPEC;

  public $message = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'IOError';
  }

  public function read($input)
  {
    return $this->_read('IOError', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('IOError', self::$_TSPEC, $output);
  }
}

class IllegalArgument extends TException {
  static $_TSPEC;

  public $message = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'IllegalArgument';
  }

  public function read($input)
  {
    return $this->_read('IllegalArgument', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('IllegalArgument', self::$_TSPEC, $output);
  }
}

class AlreadyExists extends TException {
  static $_TSPEC;

  public $message = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'AlreadyExists';
  }

  public function read($input)
  {
    return $this->_read('AlreadyExists', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('AlreadyExists', self::$_TSPEC, $output);
  }
}

