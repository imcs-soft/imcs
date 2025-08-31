<?php

namespace App\Enums;

enum ResourceType: string
{
    case PDF = 'PDF';
    case DOC = 'DOC';
    case DOCX = 'DOCX';
    case PPT = 'PPT';
    case PPTX = 'PPTX';
    case MP4 = 'MP4';
    case JPEG = 'JPEG';
    case PNG = 'PNG';
}
