<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\YouTube;

class ActivityContentDetailsSocial extends \Google\Model
{
  public $author;
  public $imageUrl;
  public $referenceUrl;
  protected $resourceIdType = ResourceId::class;
  protected $resourceIdDataType = '';
  public $type;

  public function setAuthor($author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  public function setReferenceUrl($referenceUrl)
  {
    $this->referenceUrl = $referenceUrl;
  }
  public function getReferenceUrl()
  {
    return $this->referenceUrl;
  }
  /**
   * @param ResourceId
   */
  public function setResourceId(ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return ResourceId
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActivityContentDetailsSocial::class, 'Google_Service_YouTube_ActivityContentDetailsSocial');
