<?php

namespace App\Mail;

use App\Models\Machine;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MachineMaintenanceAlert extends Mailable
{
        use Queueable, SerializesModels;

    public $machine;

    public function __construct(Machine $machine)
    {
        $this->machine = $machine;
    }

    public function build()
    {
        return $this->subject('⚠️ Mantenimiento requerido para la máquina ' . $this->machine->serial_number)
                    ->view('emails.maintenance-alert');
    }


    /**
     * Get the message envelope.
     */


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
