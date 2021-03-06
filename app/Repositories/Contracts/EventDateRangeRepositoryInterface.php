<?php

namespace App\Repositories\Contracts;

interface EventDateRangeRepositoryInterface
{
    /**
     * Get all EventDateRange objects for this ProposalRequest
     *
     * @param int $requestId
     *
     * @return mixed
     */
    public function allForProposalRequest($requestId);

    /**
     * Create a new event date range for the event
     *
     * @param int $eventId
     * @param $attributes
     *
     * @return mixed
     */
    public function storeForEvent($eventId, $attributes);

    /**
     * Does an EventDateRange with these attributes exist on this Proposal Request?
     *
     * @param int $requestId
     * @param array $attributes
     *
     * @return mixed
     */
    public function existsForProposalRequest($requestId, $attributes = []);
}
