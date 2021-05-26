<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/trace/v1/trace.proto

namespace Opentelemetry\Proto\Trace\V1\Span;

/**
 * SpanKind is the type of span. Can be used to specify additional relationships between spans
 * in addition to a parent/child relationship.
 *
 * Protobuf type <code>opentelemetry.proto.trace.v1.Span.SpanKind</code>
 */
class SpanKind
{
    /**
     * Unspecified. Do NOT use as default.
     * Implementations MAY assume SpanKind to be INTERNAL when receiving UNSPECIFIED.
     *
     * Generated from protobuf enum <code>SPAN_KIND_UNSPECIFIED = 0;</code>
     */
    const SPAN_KIND_UNSPECIFIED = 0;
    /**
     * Indicates that the span represents an internal operation within an application,
     * as opposed to an operation happening at the boundaries. Default value.
     *
     * Generated from protobuf enum <code>SPAN_KIND_INTERNAL = 1;</code>
     */
    const SPAN_KIND_INTERNAL = 1;
    /**
     * Indicates that the span covers server-side handling of an RPC or other
     * remote network request.
     *
     * Generated from protobuf enum <code>SPAN_KIND_SERVER = 2;</code>
     */
    const SPAN_KIND_SERVER = 2;
    /**
     * Indicates that the span describes a request to some remote service.
     *
     * Generated from protobuf enum <code>SPAN_KIND_CLIENT = 3;</code>
     */
    const SPAN_KIND_CLIENT = 3;
    /**
     * Indicates that the span describes a producer sending a message to a broker.
     * Unlike CLIENT and SERVER, there is often no direct critical path latency relationship
     * between producer and consumer spans. A PRODUCER span ends when the message was accepted
     * by the broker while the logical processing of the message might span a much longer time.
     *
     * Generated from protobuf enum <code>SPAN_KIND_PRODUCER = 4;</code>
     */
    const SPAN_KIND_PRODUCER = 4;
    /**
     * Indicates that the span describes consumer receiving a message from a broker.
     * Like the PRODUCER kind, there is often no direct critical path latency relationship
     * between producer and consumer spans.
     *
     * Generated from protobuf enum <code>SPAN_KIND_CONSUMER = 5;</code>
     */
    const SPAN_KIND_CONSUMER = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpanKind::class, \Opentelemetry\Proto\Trace\V1\Span_SpanKind::class);
