<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

interface ChronosMasterIf
{
    /**
     * @return bool
     */
    public function ping();
    /**
     * @param int $nodeId
     * @param \chronos\NodeStatsEntry $stats
     */
    public function reportNodeStats($nodeId, \chronos\NodeStatsEntry $stats);
    /**
     * @param int $userId
     * @return \chronos\UserDetails
     * @throws \chronos\ResourceNotFound
     * @throws \chronos\InternalError
     */
    public function getUserDetails($userId);
    /**
     * @return \chronos\Phrases
     * @throws \chronos\InternalError
     */
    public function getPhrases();
    /**
     * @return \chronos\UserGroup[]
     */
    public function getUserGroups();
}
