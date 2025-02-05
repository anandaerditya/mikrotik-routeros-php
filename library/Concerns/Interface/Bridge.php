<?php

namespace Erditya\Concerns\Interface;

use Erditya\Exceptions\ErrorException;

trait Bridge
{
    /**
     * @param string|array $command_parameters
     * @param array $arguments
     * @return mixed
     * @throws ErrorException
     */
    public function interface_bridge(string|array $command_parameters = 'print', array $arguments = []): mixed
    {
        $method_name = strtoupper(__FUNCTION__);
        $command = $command_parameters;
        $available_commands = [
            'add', 'comment', 'disable',
            'edit', 'enable', 'export',
            'find', 'get',
            'monitor', 'print', 'remove',
            'set'
        ];
        $available_parameters = [
            '.dead', '.id', '.nextid', 'actual-mtu',
            'add-dhcp-option82', 'admin-mac', 'ageing-time', 'append',
            'arp', 'arp-timeout', 'as-value', 'auto-mac',
            'brief', 'comment', 'compact', 'copy-from',
            'count-only', 'detail', 'dhcp-snooping', 'disabled',
            'do', 'duration', 'ether-type', 'fast-forward',
            'file', 'follow', 'follow-only', 'forward-delay',
            'frame-types', 'from', 'hide-sensitive', 'igmp-snooping',
            'igmp-version', 'ingress-filtering', 'interval', 'l2mtu',
            'last-member-interval', 'last-member-query-count', 'mac-address', 'max-hops',
            'max-message-age', 'membership-interval', 'mtu', 'multicast-querier',
            'multicast-router', 'name', 'priority', 'protocol-mode',
            'pvid', 'querier-interval', 'query-interval', 'query-response-interval',
            'region-name', 'region-revision', 'running', 'startup-query-count',
            'startup-query-interval', 'terse', 'transmit-hold-count', 'value-list',
            'value-name', 'verbose', 'vlan-filtering', 'where',
            'without-paging'
        ];
        $parameter_differences = array_diff(array_keys($arguments), $available_parameters);

        # Check if $commandParameters are in array type
        if (is_array($command_parameters)) {
            $arguments = $command_parameters;
            $command = 'print';
        }

        if (in_array($command, $available_commands) && empty($parameter_differences)) {
            return $this->send($command, 'interface/bridge', $arguments, $method_name);
        }

        $invalid_parameter = implode(', ', $parameter_differences);
        $msg_available_params = implode(', ', $available_parameters);

        throw new ErrorException("ERR::{$method_name} : Invalid parameter(s) {$invalid_parameter}. Available parameters are : {$msg_available_params}");
    }

    /**
     * @param string|array $command_parameters
     * @param array $arguments
     * @return mixed
     * @throws ErrorException
     */
    public function interface_bridge_port(string|array $command_parameters = 'print', array $arguments = []): mixed
    {
        $method_name = strtoupper(__FUNCTION__);
        $command = $command_parameters;
        $available_commands = [
            'add', 'comment', 'disable',
            'edit', 'enable', 'export',
            'find', 'get', 'monitor',
            'move', 'print', 'remove',
            'set'
        ];
        $available_parameters = [
            '.dead', '.id', '.nextid', 'append',
            'as-value', 'auto-isolate', 'bpdu-guard', 'bridge',
            'brief', 'broadcast-flood', 'comment', 'compact',
            'copy-from', 'count-only', 'debug', 'debug-info',
            'designated-bridge', 'designated-cost', 'designated-port-number', 'destination',
            'detail', 'disabled', 'do', 'duration',
            'dynamic', 'edge', 'edge-port', 'edge-port-discovery',
            'external-fdb-status', 'fast-leave', 'file', 'follow',
            'follow-only', 'follow-strict', 'forwarding', 'frame-types',
            'from', 'hide-sensitive', 'horizon', 'hw',
            'hw-offload', 'hw-offload-group', 'inactive', 'ingress-filtering',
            'interface', 'internal-path-cost', 'interval', 'learn',
            'learning', 'multicast-router', 'mvrp-applicant-state', 'mvrp-registrar-state',
            'parent', 'path-cost', 'place-before', 'point-to-point',
            'point-to-point-port', 'port-number', 'priority',
            'proplist', 'pvid', 'restricted-role', 'restricted-tcn',
            'role', 'root-path-cost', 'sending-rstp', 'show-ids',
            'show-sensitive', 'stats', 'status', 'tag-stacking',
            'terse', 'trusted', 'unknown-multicast-flood', 'unknown-unicast-flood',
            'value-list', 'value-name', 'verbose', 'where',
            'without-paging'
        ];
        $parameter_differences = array_diff(array_keys($arguments), $available_parameters);

        # Check if $commandParameters are in array type
        if (is_array($command_parameters)) {
            $arguments = $command_parameters;
            $command = 'print';
        }

        if (in_array($command, $available_commands) && empty($parameter_differences)) {
            return $this->send($command, 'interface/bridge/port', $arguments, $method_name);
        }

        $invalid_parameter = implode(', ', $parameter_differences);
        $msg_available_params = implode(', ', $available_parameters);

        throw new ErrorException("ERR::{$method_name} : Invalid parameter(s) {$invalid_parameter}. Available parameters are : {$msg_available_params}");
    }

    /**
     * @param string|array $command_parameters
     * @param array $arguments
     * @return mixed
     * @throws ErrorException
     */
    public function interface_bridge_calea(string|array $command_parameters = 'print', array $arguments = []): mixed
    {
        $method_name = strtoupper(__FUNCTION__);
        $command = $command_parameters;
        $available_commands = [
            'add', 'comment', 'disable',
            'edit', 'enable', 'export',
            'find', 'get', 'move',
            'print', 'remove', 'reset-counters',
            'reset-counters-all', 'set', 'unset'
        ];
        $available_parameters = [
            '.dead', '.id', '.nextid',
            '802.3-sap', '802.3-type', 'action',
            'all', 'append', 'arp-dst-address',
            'arp-dst-mac-address', 'arp-gratuitous', 'arp-hardware-type',
            'arp-opcode', 'arp-packet-type', 'arp-src-address',
            'arp-src-mac-address', 'as-value', 'chain',
            'chain', 'comment', 'compact',
            'copy-from', 'count-only', 'destination',
            'detail', 'disabled', 'dst-address',
            'dst-address6', 'dst-mac-address', 'dst-port',
            'dynamic', 'file', 'follow',
            'follow-only', 'from', 'hide-sensitive',
            'in-bridge', 'in-bridge-list', 'in-interface',
            'in-interface-list', 'ingress-priority', 'interval',
            'ip-protocol', 'limit', 'log',
            'log-prefix', 'mac-protocol', 'out-bridge',
            'out-bridge-list', 'out-interface', 'out-interface-list',
            'packet-mark', 'packet-type', 'place-before',
            'sniff-id', 'sniff-target', 'sniff-target-port',
            'src-address', 'src-address6', 'src-mac-address',
            'src-port', 'static', 'stats',
            'stp-flags', 'stp-forward-delay', 'stp-hello-time',
            'stp-max-age', 'stp-msg-age', 'stp-port',
            'stp-root-address', 'stp-root-cost', 'stp-root-priority',
            'stp-sender-address', 'stp-sender-priority', 'stp-type',
            'terse', 'tls-host', 'value-list',
            'value-name', 'verbose', 'vlan-encap',
            'vlan-id', 'vlan-priority', 'where',
            'without-paging'
        ];
        $parameter_differences = array_diff(array_keys($arguments), $available_parameters);

        # Check if $commandParameters are in array type
        if (is_array($command_parameters)) {
            $arguments = $command_parameters;
            $command = 'print';
        }

        if (in_array($command, $available_commands) && empty($parameter_differences)) {
            return $this->send($command, 'interface/bridge/calea', $arguments, $method_name);
        }

        $invalid_parameter = implode(', ', $parameter_differences);
        $msg_available_params = implode(', ', $available_parameters);

        throw new ErrorException("ERR::{$method_name} : Invalid parameter(s) {$invalid_parameter}. Available parameters are : {$msg_available_params}");
    }

    /**
     * @param string|array $command_parameters
     * @param array $arguments
     * @return mixed
     * @throws ErrorException
     */
    public function interface_bridge_filter(string|array $command_parameters = 'print', array $arguments = []): mixed
    {
        $method_name = strtoupper(__FUNCTION__);
        $command = $command_parameters;
        $available_commands = [
            'add', 'comment', 'disable', 'edit',
            'enable', 'export', 'find', 'get',
            'move', 'print', 'remove', 'reset',
            'reset-counters', 'reset-counters-all', 'set', 'unset'
        ];
        $available_parameters = [
            '.dead', '.id', '.nextid', '802.3-sap',
            '802.3-type', 'action', 'arp-dst-address', 'arp-dst-mac-address',
            'arp-gratuitous', 'arp-hardware-type', 'arp-opcode', 'arp-packet-type',
            'arp-src-address', 'arp-src-mac-address', 'bytes', 'chain',
            'comment', 'compact', 'copy-from', 'destination',
            'disabled', 'dst-address', 'dst-address6', 'dst-mac-address',
            'dst-port', 'dynamic', 'file', 'hide-sensitive',
            'in-bridge', 'in-bridge-list', 'in-interface', 'in-interface-list',
            'ingress-priority', 'invalid', 'ip-protocol', 'jump-target',
            'limit', 'log', 'log-prefix', 'mac-protocol',
            'new-packet-mark', 'new-priority', 'out-bridge', 'out-bridge-list',
            'out-interface', 'out-interface-list', 'packet-mark', 'packet-type',
            'packets', 'passthrough', 'place-before', 'show-sensitive',
            'src-address', 'src-address6', 'src-mac-address', 'src-port',
            'stp-flags', 'stp-forward-delay', 'stp-hello-time', 'stp-max-age',
            'stp-msg-age', 'stp-port', 'stp-root-address', 'stp-root-cost',
            'stp-root-priority', 'stp-sender-address', 'stp-sender-priority', 'stp-type',
            'terse', 'tls-host', 'value-name', 'verbose',
            'vlan-encap', 'vlan-id', 'vlan-priority', 'where'
        ];
        $parameter_differences = array_diff(array_keys($arguments), $available_parameters);

        # Check if $commandParameters are in array type
        if (is_array($command_parameters)) {
            $arguments = $command_parameters;
            $command = 'print';
        }

        if (in_array($command, $available_commands) && empty($parameter_differences)) {
            return $this->send($command, 'interface/bridge/filter', $arguments, $method_name);
        }

        $invalid_parameter = implode(', ', $parameter_differences);
        $msg_available_params = implode(', ', $available_parameters);

        throw new ErrorException("ERR::{$method_name} : Invalid parameter(s) {$invalid_parameter}. Available parameters are : {$msg_available_params}");
    }

    /**
     * @param string|array $command_parameters
     * @param array $arguments
     * @return mixed
     * @throws ErrorException
     */
    public function interface_bridge_host(string|array $command_parameters = 'print', array $arguments = []): mixed
    {
        $method_name = strtoupper(__FUNCTION__);
        $command = $command_parameters;
        $available_commands = [
            'add', 'comment', 'disable', 'edit',
            'enable', 'export', 'find', 'get',
            'print', 'remove', 'reset', 'set',
            'unset'
        ];
        $available_parameters = [
            '.dead', '.id', '.nextid', '802.3-sap',
            '802.3-type', 'action', 'arp-dst-address', 'arp-dst-mac-address',
            'arp-gratuitous', 'arp-hardware-type', 'arp-opcode', 'arp-packet-type',
            'arp-src-address', 'arp-src-mac-address', 'bytes', 'chain',
            'comment', 'compact', 'copy-from', 'destination',
            'disabled', 'dst-address', 'dst-address6', 'dst-mac-address',
            'dst-port', 'dynamic', 'file', 'hide-sensitive',
            'in-bridge', 'in-bridge-list', 'in-interface', 'in-interface-list',
            'ingress-priority', 'invalid', 'ip-protocol', 'jump-target',
            'limit', 'log', 'log-prefix', 'mac-protocol',
            'new-packet-mark', 'new-priority', 'out-bridge', 'out-bridge-list',
            'out-interface', 'out-interface-list', 'packet-mark', 'packet-type',
            'packets', 'passthrough', 'place-before', 'show-sensitive',
            'src-address', 'src-address6', 'src-mac-address', 'src-port',
            'stp-flags', 'stp-forward-delay', 'stp-hello-time', 'stp-max-age',
            'stp-msg-age', 'stp-port', 'stp-root-address', 'stp-root-cost',
            'stp-root-priority', 'stp-sender-address', 'stp-sender-priority', 'stp-type',
            'terse', 'tls-host', 'value-name', 'verbose',
            'vlan-encap', 'vlan-id', 'vlan-priority', 'where'
        ];
        $parameter_differences = array_diff(array_keys($arguments), $available_parameters);

        # Check if $commandParameters are in array type
        if (is_array($command_parameters)) {
            $arguments = $command_parameters;
            $command = 'print';
        }

        if (in_array($command, $available_commands) && empty($parameter_differences)) {
            return $this->send($command, 'interface/bridge/host', $arguments, $method_name);
        }

        $invalid_parameter = implode(', ', $parameter_differences);
        $msg_available_params = implode(', ', $available_parameters);

        throw new ErrorException("ERR::{$method_name} : Invalid parameter(s) {$invalid_parameter}. Available parameters are : {$msg_available_params}");
    }

    // TODO - MDB
    // TODO - MSTI
    // TODO - NAT
    // TODO - Port
    // TODO - Port Controller
    // TODO - Port Extender
    // TODO - Settings
    // TODO - VLAN
    // TODO - Bridge Port MST Override
}