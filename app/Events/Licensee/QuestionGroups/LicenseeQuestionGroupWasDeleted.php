<?php

namespace App\Events\Licensee\QuestionGroups;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LicenseeQuestionGroupWasDeleted
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var int
     */
    private $groupId;

    /**
     * Create a new event instance.
     *
     * @param int $groupId
     * @param string $name
     */
    public function __construct($groupId)
    {
        $this->groupId = $groupId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
