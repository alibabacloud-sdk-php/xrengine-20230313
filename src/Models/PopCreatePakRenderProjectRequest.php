<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopCreatePakRenderProjectRequest extends Model
{
    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'extInfo' => 'ExtInfo',
        'intro'   => 'Intro',
        'title'   => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopCreatePakRenderProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
