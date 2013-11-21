<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.markus-schindler.de/projects/zf2-twitterbootstrap-module>.
 */

namespace TwitterBootstrap;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getViewHelperConfig()
    {
        return [
            'invokables' => [
                'bootstrapLabel'          => 'TwitterBootstrap\View\Helper\Label',
                'bootstrapAlert'          => 'TwitterBootstrap\View\Helper\Alert',
                'bootstrapBadge'          => 'TwitterBootstrap\View\Helper\Badge',
                'bootstrapProgressBar'    => 'TwitterBootstrap\View\Helper\ProgressBar',
                'bootstrapButtonDropdown' => 'TwitterBootstrap\View\Helper\ButtonDropdown',
                'bootstrapPanel'          => 'TwitterBootstrap\View\Helper\Panel',
                'bootstrapPageHeader'     => 'TwitterBootstrap\View\Helper\PageHeader',
                'bootstrapIcon'           => 'TwitterBootstrap\View\Helper\Icon',
                'bootstrapButtonGroup'    => 'TwitterBootstrap\View\Helper\ButtonGroup',
            ],
        ];
    }
}
